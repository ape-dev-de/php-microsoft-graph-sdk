<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryDefinitionDiscoverabilities - Enum
 */
enum DirectoryDefinitionDiscoverabilities: string
{
    case NONE = 'None';
    case ATTRIBUTENAMES = 'AttributeNames';
    case ATTRIBUTEDATATYPES = 'AttributeDataTypes';
    case ATTRIBUTEREADONLY = 'AttributeReadOnly';
    case REFERENCEATTRIBUTES = 'ReferenceAttributes';
    case UNKNOWNFUTUREVALUE = 'UnknownFutureValue';
}
