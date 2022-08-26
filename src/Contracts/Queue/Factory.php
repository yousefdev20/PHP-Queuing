<?php

namespace Yousef\QueuingSystem\Contracts\Queue;

interface Factory
{
    /**
     * Resolve a queue connection instance.
     *
     * @param  string|null  $name
     * @return Yousef\QueuingSystem\Contracts\Queue\Queue
     */
    public function connection($name = null);
}
