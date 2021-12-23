<?php

namespace RalphJSmit\TallInstall\Actions\Composer;

use Symfony\Component\Process\Process;

class ComposerInstallAction
{
    public function execute(array $arguments, string $basepath)
    {
        $process = new Process(
            array_merge(['composer', 'require'], $arguments),
            $basepath,
        );
        $process->run();
    }
}
