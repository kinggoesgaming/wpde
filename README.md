wpde
----

A wordpress development environment.


# Setup
## Prerequisites
- You need to install [docker](https://www.docker.com/products/docker-desktop).
- If on Linux, you also need to [docker compose](https://docs.docker.com/compose/install/)

# Running the wordpress instance
- Download the zip file.
- Open
    - `Command Prompt` or `Windows Terminal` on **Windows**
    - `Terminal` on **macOS** or **GNU/Linux**
- Run `docker-compose up`
    - IF you want to run the instance in the background, use `docker-compose up -d` instead.

# Shutting down wordpress instance
- Open
    - `Command Prompt` or `Windows Terminal` on **Windows**
    - `Terminal` on **macOS** or **GNU/Linux**
- Run `docker-compose down`

# Deleting wordpress instance
- Open
    - `Command Prompt` or `Windows Terminal` on **Windows**
    - `Terminal` on **macOS** or **GNU/Linux**
- Run `docker-compose down -v`