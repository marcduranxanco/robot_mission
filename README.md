# Robot Mission

## Project description
The project is deployed from the docker compose file available in the `docker` folder.
The main parameters of the robot, must be setted on the `.env` file as follows:
- `PLANET_H`: Max Hight planet. Example: 10
- `PLANET_W`: Max Width planet. Example: 10
- `ROUTE`: Robot route. Example: "FFLFF"
- `INIT_W`: Initial High point for the robot. Example: 2
- `INIT_H`: Initial Width point for the robot. Example: 3

## Install the project
The project has a mikefile that allows you to perform the basic actions for this project. Description:
- make install: installs the project
- make up: starts the docker containers
- make down: stops the docker containers
- make dump: run the composer -- dump
- make dumpo: composer dump -o
- make php: access to the php container
- make run-tests: runs the project tests
- make robot: starts the cli project

## Foder estructure
A structure has been created by trying to apply DDD as follows:
Bounded Context: Mission (src/Mission)
    Modules: Planet and Robot (each module has its own domain and controller):
        Planet (src/Mission/Planet)
        Robot (src/Mission/Robot)
Shared: Common classes (src/Shared)
App: Main apps (src/app)
    robot_mission: main robot mission app
Tests: The test folder follows the folder code structure