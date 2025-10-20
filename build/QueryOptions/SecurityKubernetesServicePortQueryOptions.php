<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServicePort resources
 *
 * Available select fields:
 * - appProtocol
 * - name
 * - nodePort
 * - port
 * - protocol
 * - targetPort
 */
class SecurityKubernetesServicePortQueryOptions extends QueryOptions
{
    public const FIELD_APP_PROTOCOL = 'appProtocol';
    public const FIELD_NAME = 'name';
    public const FIELD_NODE_PORT = 'nodePort';
    public const FIELD_PORT = 'port';
    public const FIELD_PROTOCOL = 'protocol';
    public const FIELD_TARGET_PORT = 'targetPort';

    /**
     * Select specific SecurityKubernetesServicePort properties
     * 
     * @param array<string> $select Use SecurityKubernetesServicePortQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
