<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityKubernetesPodEvidence resources
 *
 * Available select fields:
 * - containers
 * - controller
 * - ephemeralContainers
 * - initContainers
 * - labels
 * - name
 * - namespace
 * - podIp
 * - serviceAccount
 */
class SecurityKubernetesPodEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_CONTAINERS = 'containers';
    public const FIELD_CONTROLLER = 'controller';
    public const FIELD_EPHEMERAL_CONTAINERS = 'ephemeralContainers';
    public const FIELD_INIT_CONTAINERS = 'initContainers';
    public const FIELD_LABELS = 'labels';
    public const FIELD_NAME = 'name';
    public const FIELD_NAMESPACE = 'namespace';
    public const FIELD_POD_IP = 'podIp';
    public const FIELD_SERVICE_ACCOUNT = 'serviceAccount';

    /**
     * Select specific SecurityKubernetesPodEvidence properties
     * 
     * @param array<string> $select Use SecurityKubernetesPodEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
