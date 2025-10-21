<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApplicationServicePrincipal
 */
class ApplicationServicePrincipal
{
    public function __construct(
        /**  */
        public ?Application $application = null,
        /**  */
        public ?ServicePrincipal $servicePrincipal = null
    ) {}
}
