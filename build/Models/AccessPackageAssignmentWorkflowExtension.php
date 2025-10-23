<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentWorkflowExtension
 */
class AccessPackageAssignmentWorkflowExtension
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Configuration for securing the API call to the logic app. For example, using OAuth client credentials flow.
     * @var CustomExtensionAuthenticationConfiguration|\stdClass|null
     */
    public mixed $authenticationConfiguration = null;

    /** 
     * HTTP connection settings that define how long Microsoft Entra ID can wait for a connection to a logic app, how many times you can retry a timed-out connection and the exception scenarios when retries are allowed.
     * @var CustomExtensionClientConfiguration|\stdClass|null
     */
    public mixed $clientConfiguration = null;

    /** Description for the customCalloutExtension object. */
    public ?string $description = null;

    /** Display name for the customCalloutExtension object. */
    public ?string $displayName = null;

    /** 
     * The type and details for configuring the endpoint to call the logic app's workflow.
     * @var CustomExtensionEndpointConfiguration|\stdClass|null
     */
    public mixed $endpointConfiguration = null;

    /** 
     * The callback configuration for a custom extension.
     * @var CustomExtensionCallbackConfiguration|\stdClass|null
     */
    public mixed $callbackConfiguration = null;

    /** The userPrincipalName of the user or identity of the subject that created this resource. Read-only. */
    public ?string $createdBy = null;

    /** When the entity was created. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The userPrincipalName of the identity that last modified the entity. */
    public ?string $lastModifiedBy = null;

    /** When the entity was last modified. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['authenticationConfiguration'])) {
            $this->authenticationConfiguration = $data['authenticationConfiguration'];
        }
        if (isset($data['clientConfiguration'])) {
            $this->clientConfiguration = $data['clientConfiguration'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endpointConfiguration'])) {
            $this->endpointConfiguration = $data['endpointConfiguration'];
        }
        if (isset($data['callbackConfiguration'])) {
            $this->callbackConfiguration = $data['callbackConfiguration'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = $data['createdDateTime'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = $data['lastModifiedBy'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = $data['lastModifiedDateTime'];
        }
    }
}
