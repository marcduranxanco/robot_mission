<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\RobotMission\Controller\RobotMissionController;

class RobotCommand extends Command{
    protected function configure(){
        $this->setName('robot-mission');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        $RobotController = new RobotMissionController();

        try {
            $output->writeln(sprintf($RobotController->run()));
            return Command::SUCCESS;
        } catch (\Throwable $th) {
            $output->writeln(sprintf($th->getMessage()));
            return Command::FAILURE;
        } 
    }
}