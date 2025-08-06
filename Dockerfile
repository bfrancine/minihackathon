# Etapa 1: Construcción del frontend
FROM node:20 AS build

WORKDIR /app

COPY package.json yarn.lock ./
RUN yarn install

COPY . .
RUN yarn build

# Etapa 2: Servidor estático usando nginx
FROM nginx:alpine

# Copia archivos generados por Vite al directorio que nginx sirve
COPY --from=build /app/dist /usr/share/nginx/html

# Copia configuración personalizada de nginx si la necesitas
# COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
