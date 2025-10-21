<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SynchronizationTemplate resources
 *
 * Available select fields:
 * - applicationId
 * - default
 * - description
 * - discoverable
 * - factoryTag
 * - metadata
 * - schema
 */
class SynchronizationTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SynchronizationTemplate
     */
    public const FIELD_APPLICATION_ID = 'applicationId';
    public const FIELD_DEFAULT = 'default';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISCOVERABLE = 'discoverable';
    public const FIELD_FACTORY_TAG = 'factoryTag';
    public const FIELD_METADATA = 'metadata';
    public const FIELD_SCHEMA = 'schema';

    /**
     * Select specific SynchronizationTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
