<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtension
 */
class IdentityGovernanceCustomTaskExtension
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
     * The callback configuration for a custom task extension.
     * @var CustomExtensionCallbackConfiguration|\stdClass|null
     */
    public mixed $callbackConfiguration = null;

    /** When the custom task extension was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** When the custom extension was last modified.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby. */
    public ?\DateTimeInterface $lastModifiedDateTime = null;

    /** 
     * The unique identifier of the Microsoft Entra user that created the custom task extension.Supports $filter(eq, ne) and $expand.
     * @var User|\stdClass|null
     */
    public mixed $createdBy = null;

    /** 
     * The unique identifier of the Microsoft Entra user that modified the custom task extension last.Supports $filter(eq, ne) and $expand.
     * @var User|\stdClass|null
     */
    public mixed $lastModifiedBy = null;


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
            $this->authenticationConfiguration = is_array($data['authenticationConfiguration']) ? new CustomExtensionAuthenticationConfiguration($data['authenticationConfiguration']) : $data['authenticationConfiguration'];
        }
        if (isset($data['clientConfiguration'])) {
            $this->clientConfiguration = is_array($data['clientConfiguration']) ? new CustomExtensionClientConfiguration($data['clientConfiguration']) : $data['clientConfiguration'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['endpointConfiguration'])) {
            $this->endpointConfiguration = is_array($data['endpointConfiguration']) ? new CustomExtensionEndpointConfiguration($data['endpointConfiguration']) : $data['endpointConfiguration'];
        }
        if (isset($data['callbackConfiguration'])) {
            $this->callbackConfiguration = is_array($data['callbackConfiguration']) ? new CustomExtensionCallbackConfiguration($data['callbackConfiguration']) : $data['callbackConfiguration'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['lastModifiedDateTime'])) {
            $this->lastModifiedDateTime = is_string($data['lastModifiedDateTime']) ? new \DateTimeImmutable($data['lastModifiedDateTime']) : $data['lastModifiedDateTime'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new User($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['lastModifiedBy'])) {
            $this->lastModifiedBy = is_array($data['lastModifiedBy']) ? new User($data['lastModifiedBy']) : $data['lastModifiedBy'];
        }
    }
}
