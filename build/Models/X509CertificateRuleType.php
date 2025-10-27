<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * X509CertificateRuleType - Enum
 */
enum X509CertificateRuleType: string
{
    case ISSUERSUBJECT = 'issuerSubject';
    case POLICYOID = 'policyOID';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
    case ISSUERSUBJECTANDPOLICYOID = 'issuerSubjectAndPolicyOID';
}
