<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesServiceEvidence resources
 *
 * Available select fields:
 * - clusterIP
 * - externalIPs
 * - labels
 * - name
 * - namespace
 * - selector
 * - servicePorts
 * - serviceType
 */
class SecurityKubernetesServiceEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_CLUSTER_IP = 'clusterIP';
    public const FIELD_EXTERNAL_IPS = 'externalIPs';
    public const FIELD_LABELS = 'labels';
    public const FIELD_NAME = 'name';
    public const FIELD_NAMESPACE = 'namespace';
    public const FIELD_SELECTOR = 'selector';
    public const FIELD_SERVICE_PORTS = 'servicePorts';
    public const FIELD_SERVICE_TYPE = 'serviceType';

    /**
     * Select specific SecurityKubernetesServiceEvidence properties
     * 
     * @param array<string> $select Use SecurityKubernetesServiceEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
