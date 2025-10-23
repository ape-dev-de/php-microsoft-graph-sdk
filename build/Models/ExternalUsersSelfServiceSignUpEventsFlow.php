<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ExternalUsersSelfServiceSignUpEventsFlow
 */
class ExternalUsersSelfServiceSignUpEventsFlow
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The conditions representing the context of the authentication request that's used to decide whether the events policy is invoked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @var AuthenticationConditions|\stdClass|null
     */
    public mixed $conditions = null;

    /** The description of the events policy. */
    public ?string $description = null;

    /** Required. The display name for the events policy. */
    public ?string $displayName = null;

    /** 
     * The configuration for what to invoke when attributes are ready to be collected from the user.
     * @var OnAttributeCollectionHandler|\stdClass|null
     */
    public mixed $onAttributeCollection = null;

    /** 
     * The configuration for what to invoke when attribution collection starts.
     * @var OnAttributeCollectionStartHandler|\stdClass|null
     */
    public mixed $onAttributeCollectionStart = null;

    /** 
     * The configuration for what to invoke when attributes are submitted at the end of attribution collection.
     * @var OnAttributeCollectionSubmitHandler|\stdClass|null
     */
    public mixed $onAttributeCollectionSubmit = null;

    /** 
     * Required. The configuration for what to invoke when authentication methods are ready to be presented to the user. Must have at least one identity provider linked.  Supports $filter (eq). See support for filtering on user flows for syntax information.
     * @var OnAuthenticationMethodLoadStartHandler|\stdClass|null
     */
    public mixed $onAuthenticationMethodLoadStart = null;

    /** 
     * Required. The configuration for what to invoke when an authentication flow is ready to be initiated.
     * @var OnInteractiveAuthFlowStartHandler|\stdClass|null
     */
    public mixed $onInteractiveAuthFlowStart = null;

    /** 
     * The configuration for what to invoke during user creation.
     * @var OnUserCreateStartHandler|\stdClass|null
     */
    public mixed $onUserCreateStart = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['conditions'])) {
            $this->conditions = is_array($data['conditions']) ? new AuthenticationConditions($data['conditions']) : $data['conditions'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['onAttributeCollection'])) {
            $this->onAttributeCollection = is_array($data['onAttributeCollection']) ? new OnAttributeCollectionHandler($data['onAttributeCollection']) : $data['onAttributeCollection'];
        }
        if (isset($data['onAttributeCollectionStart'])) {
            $this->onAttributeCollectionStart = is_array($data['onAttributeCollectionStart']) ? new OnAttributeCollectionStartHandler($data['onAttributeCollectionStart']) : $data['onAttributeCollectionStart'];
        }
        if (isset($data['onAttributeCollectionSubmit'])) {
            $this->onAttributeCollectionSubmit = is_array($data['onAttributeCollectionSubmit']) ? new OnAttributeCollectionSubmitHandler($data['onAttributeCollectionSubmit']) : $data['onAttributeCollectionSubmit'];
        }
        if (isset($data['onAuthenticationMethodLoadStart'])) {
            $this->onAuthenticationMethodLoadStart = is_array($data['onAuthenticationMethodLoadStart']) ? new OnAuthenticationMethodLoadStartHandler($data['onAuthenticationMethodLoadStart']) : $data['onAuthenticationMethodLoadStart'];
        }
        if (isset($data['onInteractiveAuthFlowStart'])) {
            $this->onInteractiveAuthFlowStart = is_array($data['onInteractiveAuthFlowStart']) ? new OnInteractiveAuthFlowStartHandler($data['onInteractiveAuthFlowStart']) : $data['onInteractiveAuthFlowStart'];
        }
        if (isset($data['onUserCreateStart'])) {
            $this->onUserCreateStart = is_array($data['onUserCreateStart']) ? new OnUserCreateStartHandler($data['onUserCreateStart']) : $data['onUserCreateStart'];
        }
    }
}
