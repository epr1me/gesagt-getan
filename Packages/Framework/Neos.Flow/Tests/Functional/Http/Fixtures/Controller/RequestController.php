<?php
namespace Neos\Flow\Tests\Functional\Http\Fixtures\Controller;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Mvc\Controller\ActionController;

class RequestController extends ActionController
{
    /**
     * @return string
     */
    public function bodyAction()
    {
        return json_encode($this->request->getHttpRequest()->getParsedBody());
    }

    public function methodAction(): string
    {
        return $this->request->getHttpRequest()->getMethod();
    }
}
