<?php

declare(strict_types=1);

/**
 * This file is part of Coole.
 *
 * @link     https://github.com/guanguans/coole
 * @contact  guanguans <ityaozm@gmail.com>
 * @license  https://github.com/guanguans/coole/blob/main/LICENSE
 */

namespace Coole\Routing;

use Coole\HttpKernel\Controller\HasControllerAble;
use Symfony\Component\Routing\Route as SymfonyRoute;

class Route extends SymfonyRoute
{
    use HasControllerAble;

    public function __construct(string $path = '/', array $defaults = [], array $requirements = [], array $options = [], ?string $host = '', $schemes = [], $methods = [], ?string $condition = '')
    {
        parent::__construct($path, $defaults, $requirements, $options, $host, $schemes, $methods, $condition);
    }
}
