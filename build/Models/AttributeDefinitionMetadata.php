<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttributeDefinitionMetadata - Enum
 */
enum AttributeDefinitionMetadata: string
{
    case BASEATTRIBUTENAME = 'BaseAttributeName';
    case COMPLEXOBJECTDEFINITION = 'ComplexObjectDefinition';
    case ISCONTAINER = 'IsContainer';
    case ISCUSTOMERDEFINED = 'IsCustomerDefined';
    case ISDOMAINQUALIFIED = 'IsDomainQualified';
    case LINKPROPERTYNAMES = 'LinkPropertyNames';
    case LINKTYPENAME = 'LinkTypeName';
    case MAXIMUMLENGTH = 'MaximumLength';
    case REFERENCEDPROPERTY = 'ReferencedProperty';
}
