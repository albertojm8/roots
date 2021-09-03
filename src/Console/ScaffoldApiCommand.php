<?php

namespace Soho\Roots\Console;

use Illuminate\Console\GeneratorCommand;

class ScaffoldApiCommand extends GeneratorCommand
{
    protected $name = 'roots:api';

    protected $description = 'Scaffold API Resources';

    protected $type = 'Api';

    protected function getStub()
    {
        return __DIR__ . '/stubs/api.php.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Api';
    }

    public function handle()
    {
        parent::handle();

        $this->doOtherOperations();
    }

    protected function doOtherOperations()
    {
        // Get the fully qualified class name (FQN)
        $class = $this->qualifyClass($this->getNameInput());

        // get the destination path, based on the default namespace
        $path = $this->getPath($class);

        $content = file_get_contents($path);

        // Update the file content with additional data (regular expressions)

        file_put_contents($path, $content);
    }
}