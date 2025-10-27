<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesPlatform - Enum
 */
enum SecurityKubernetesPlatform: string
{
    case UNKNOWN = 'unknown';
    case AKS = 'aks';
    case EKS = 'eks';
    case GKE = 'gke';
    case ARC = 'arc';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
