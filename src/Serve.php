<?php

namespace Yousef\QueuingSystem;

use Yousef\QueuingSystem\Helpers\Config;
use Yousef\QueuingSystem\Queue\Worker;

class Serve
{
    /**
     * The queue worker instance.
     *
     * @var \Yousef\QueuingSystem\Worker
     */
    protected Worker $worker;

    /**
     * Create a new queue work command.
     *
     */
    public function __construct(Worker $worker)
    {
        $this->worker = $worker;
        echo "hi there";
        $this->handle();
    }

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {

        $connection = 'database';

        $queue = 'default';

        return $this->runWorker(
            $connection, $queue
        );
    }

    protected function runWorker($connection, $queue)
    {
        return $this->worker->setName($queue)
            ->daemon(
                $connection, $queue
            );
    }
}
require 'vendor/autoload.php';
Config::set('databases', ['mysql' => ['driver' => 'mysql']]);
var_dump(Config::get('databases'));