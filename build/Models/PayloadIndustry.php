<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadIndustry - Enum
 */
enum PayloadIndustry: string
{
    case UNKNOWN = 'unknown';
    case OTHER = 'other';
    case BANKING = 'banking';
    case BUSINESSSERVICES = 'businessServices';
    case CONSUMERSERVICES = 'consumerServices';
    case EDUCATION = 'education';
    case ENERGY = 'energy';
    case CONSTRUCTION = 'construction';
    case CONSULTING = 'consulting';
    case FINANCIALSERVICES = 'financialServices';
    case GOVERNMENT = 'government';
    case HOSPITALITY = 'hospitality';
    case INSURANCE = 'insurance';
    case LEGAL = 'legal';
    case COURIERSERVICES = 'courierServices';
    case IT = 'IT';
    case HEALTHCARE = 'healthcare';
    case MANUFACTURING = 'manufacturing';
    case RETAIL = 'retail';
    case TELECOM = 'telecom';
    case REALESTATE = 'realEstate';
    case UNKNOWNFUTUREVALUE = 'unknownFutureValue';
}
