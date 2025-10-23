<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityKubernetesPodEvidence
 */
class SecurityKubernetesPodEvidence
{
    /** The date and time when the evidence was created and added to the alert. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** 
     * Detailed description of the entity role/s in an alert. Values are free-form.
     * @var string[]
     */
    public array $detailedRoles = [];

    /**  */
    public ?SecurityEvidenceRemediationStatus $remediationStatus = null;

    /** Details about the remediation status. */
    public ?string $remediationStatusDetails = null;

    /** 
     * The role/s that an evidence entity represents in an alert, for example, an IP address that is associated with an attacker has the evidence role Attacker.
     * @var SecurityEvidenceRole[]
     */
    public array $roles = [];

    /** 
     * Array of custom tags associated with an evidence instance, for example, to denote a group of devices, high-value assets, etc.
     * @var string[]
     */
    public array $tags = [];

    /**  */
    public ?SecurityEvidenceVerdict $verdict = null;

    /** 
     * The list of pod containers which are not init or ephemeral containers.
     * @var SecurityContainerEvidence[]
     */
    public array $containers = [];

    /** 
     * The pod controller.
     * @var SecurityKubernetesControllerEvidence|\stdClass|null
     */
    public mixed $controller = null;

    /** 
     * The list of pod ephemeral containers.
     * @var SecurityContainerEvidence[]
     */
    public array $ephemeralContainers = [];

    /** 
     * The list of pod init containers.
     * @var SecurityContainerEvidence[]
     */
    public array $initContainers = [];

    /** 
     * The pod labels.
     * @var SecurityDictionary|\stdClass|null
     */
    public mixed $labels = null;

    /** The pod name. */
    public ?string $name = null;

    /** 
     * The pod namespace.
     * @var SecurityKubernetesNamespaceEvidence|\stdClass|null
     */
    public mixed $namespace = null;

    /** 
     * The pod IP.
     * @var SecurityIpEvidence|\stdClass|null
     */
    public mixed $podIp = null;

    /** 
     * The pod service account.
     * @var SecurityKubernetesServiceAccountEvidence|\stdClass|null
     */
    public mixed $serviceAccount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['detailedRoles'])) {
            $this->detailedRoles = $data['detailedRoles'];
        }
        if (isset($data['remediationStatus'])) {
            $this->remediationStatus = is_array($data['remediationStatus']) ? new SecurityEvidenceRemediationStatus($data['remediationStatus']) : $data['remediationStatus'];
        }
        if (isset($data['remediationStatusDetails'])) {
            $this->remediationStatusDetails = $data['remediationStatusDetails'];
        }
        if (isset($data['roles'])) {
            $this->roles = $data['roles'];
        }
        if (isset($data['tags'])) {
            $this->tags = $data['tags'];
        }
        if (isset($data['verdict'])) {
            $this->verdict = is_array($data['verdict']) ? new SecurityEvidenceVerdict($data['verdict']) : $data['verdict'];
        }
        if (isset($data['containers'])) {
            $this->containers = $data['containers'];
        }
        if (isset($data['controller'])) {
            $this->controller = is_array($data['controller']) ? new SecurityKubernetesControllerEvidence($data['controller']) : $data['controller'];
        }
        if (isset($data['ephemeralContainers'])) {
            $this->ephemeralContainers = $data['ephemeralContainers'];
        }
        if (isset($data['initContainers'])) {
            $this->initContainers = $data['initContainers'];
        }
        if (isset($data['labels'])) {
            $this->labels = is_array($data['labels']) ? new SecurityDictionary($data['labels']) : $data['labels'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['namespace'])) {
            $this->namespace = is_array($data['namespace']) ? new SecurityKubernetesNamespaceEvidence($data['namespace']) : $data['namespace'];
        }
        if (isset($data['podIp'])) {
            $this->podIp = is_array($data['podIp']) ? new SecurityIpEvidence($data['podIp']) : $data['podIp'];
        }
        if (isset($data['serviceAccount'])) {
            $this->serviceAccount = is_array($data['serviceAccount']) ? new SecurityKubernetesServiceAccountEvidence($data['serviceAccount']) : $data['serviceAccount'];
        }
    }
}
