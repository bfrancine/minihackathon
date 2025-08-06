# Etapa 1: Build
FROM node:20 AS build

WORKDIR /app

# Copia solo los archivos necesarios para instalar dependencias
COPY package.json package-lock.json ./
RUN npm install

# Copia solo el código fuente necesario
COPY src ./src
COPY public ./public

# Construye la app
RUN npm run build

# Etapa 2: Servir con nginx
FROM nginx:alpine

# Copia la carpeta de build generada
COPY --from=build /app/dist /usr/share/nginx/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
