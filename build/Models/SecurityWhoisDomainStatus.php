<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityWhoisDomainStatus - Enum
 */
enum SecurityWhoisDomainStatus: string
{
    case CLIENTDELETEPROHIBITED = 'clientDeleteProhibited';
    case CLIENTHOLD = 'clientHold';
    case CLIENTRENEWPROHIBITED = 'clientRenewProhibited';
    case CLIENTTRANSFERPROHIBITED = 'clientTransferProhibited';
    case CLIENTUPDATEPROHIBITED = 'clientUpdateProhibited';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
