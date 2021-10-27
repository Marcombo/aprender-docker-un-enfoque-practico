# Paso 1. Compilamos la aplicación
FROM golang:1.17.2-alpine AS builder
WORKDIR /src
COPY src .
RUN go build holamundo.go -o holamundo

# Paso 2. Copiamos la aplicación compilada a otra imagen
FROM alpine:3.14.2
COPY --from=builder /src/holamundo /
ENTRYPOINT ["/holamundo"]