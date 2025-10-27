<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcRegionGroup - Enum
 */
enum CloudPcRegionGroup: string
{
    case DEFAULT = 'default';
    case AUSTRALIA = 'australia';
    case CANADA = 'canada';
    case USCENTRAL = 'usCentral';
    case USEAST = 'usEast';
    case USWEST = 'usWest';
    case FRANCE = 'france';
    case GERMANY = 'germany';
    case EUROPEUNION = 'europeUnion';
    case UNITEDKINGDOM = 'unitedKingdom';
    case JAPAN = 'japan';
    case ASIA = 'asia';
    case INDIA = 'india';
    case SOUTHAMERICA = 'southAmerica';
    case EUAP = 'euap';
    case USGOVERNMENT = 'usGovernment';
    case USGOVERNMENTDOD = 'usGovernmentDOD';
    case NORWAY = 'norway';
    case SWITZERLAND = 'switzerland';
    case SOUTHKOREA = 'southKorea';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
