# Docker Compose - Setup Guide

This project provides a ready-to-use example demonstrating how to get started with Docker Compose. Docker Compose is a tool for defining and running multi-container Docker applications, making it particularly useful for multi-service web applications.

## Prerequisites

Regardless of whether you are using Windows or macOS, you should ensure you have the following installed:

1. [Docker Desktop for Windows](https://www.docker.com/products/docker-desktop) or [Docker Desktop for Mac](https://www.docker.com/products/docker-desktop)

Docker Desktop comes with both Docker Engine and Docker Compose, so there's no need to install these separately.

## Setup

After ensuring the above prerequisite is met, follow these steps:

1. Clone or download this repository.
2. Navigate to the root directory of the project in your terminal.
3. Once your project is set up, if your Docker Images need to be build, run the following command to build your images and start your services in the background:

```bash
docker compose up -d --build
```

## Customizing Your Docker Compose Application

This project serves as a basic boilerplate for a Docker Compose application. You can extend this example by defining new services in the `compose.yml` file according to the requirements of your application.

## Cleaning Up the Services

If you're build your images brefore, running `docker compose down` won't delete your images by default. If you want to also remove the images, you can use:

```bash
docker compose down --rmi all
```

This will remove all images that were used by any service in your `compose.yml` file. If you wwant to keep your images, you can continue using.

Use this project as a starting point to fully harness the capabilities of Docker Compose. Make sure to customize and get the most out of this example for your specific needs!
