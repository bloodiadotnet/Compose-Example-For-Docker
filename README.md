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

### For Windows Users

If you're using PowerShell, use the following command:

```bash
docker compose up
```

### For Mac Users

If you're using a Unix-like shell (such as Bash), use the following command:

```bash
docker compose up
```

## Customizing Your Docker Compose Application

This project serves as a basic boilerplate for a Docker Compose application. You can extend this example by defining new services in the `compose.yml` file according to the requirements of your application.

## Cleaning Up the Services

When you're done with the services and want to clean them up, use the following command:

### For Windows Users

In PowerShell, use the following command:

```bash
docker compose down
```

### For Mac Users

In a Unix-like shell such as Bash, use the following command:

```bash
docker compose down
```

This command will stop and remove all the services defined in your `compose.yml` file.

Use this project as a starting point to fully harness the capabilities of Docker Compose. Make sure to customize and get the most out of this example for your specific needs!
