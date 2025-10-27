<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesServiceType - Enum
 */
enum SecurityKubernetesServiceType: string
{
    case UNKNOWN = 'unknown';
    case CLUSTERIP = 'clusterIP';
    case EXTERNALNAME = 'externalName';
    case NODEPORT = 'nodePort';
    case LOADBALANCER = 'loadBalancer';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
