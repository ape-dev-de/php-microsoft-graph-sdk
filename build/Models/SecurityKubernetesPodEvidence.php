<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesPodEvidence
 */
class SecurityKubernetesPodEvidence
{
    public function __construct(
        /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** @var string[] Detailed description of the entity role/s in an alert. Values are free-form. */
        public array $detailedRoles = [],
        /**  */
        public ?SecurityEvidenceRemediationStatus $remediationStatus = null,
        /** Details about the remediation status. */
        public ?string $remediationStatusDetails = null,
        /** The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker. */
        public array $roles = [],
        /** @var string[] Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc. */
        public array $tags = [],
        /**  */
        public ?SecurityEvidenceVerdict $verdict = null,
        /** The list of pod containers which are not init or ephemeral containers. */
        public array $containers = [],
        /** The pod controller. */
        public ?SecurityKubernetesControllerEvidence $controller = null,
        /** The list of pod ephemeral containers. */
        public array $ephemeralContainers = [],
        /** The list of pod init containers. */
        public array $initContainers = [],
        /** The pod labels. */
        public ?SecurityDictionary $labels = null,
        /** The pod name. */
        public ?string $name = null,
        /** The pod namespace. */
        public ?SecurityKubernetesNamespaceEvidence $namespace = null,
        /** The pod IP. */
        public ?SecurityIpEvidence $podIp = null,
        /** The pod service account. */
        public ?SecurityKubernetesServiceAccountEvidence $serviceAccount = null
    ) {}
}
