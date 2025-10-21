<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\Authentication;
use ApeDevDe\MicrosoftGraphSdk\QueryOptions\AuthenticationQueryOptions;

/**
 * Request builder for Authentication
 */
class AuthenticationRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get the resource
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $filter: Filter results
     * - $orderby: Order results
     * - $top: Limit number of results
     * - $skip: Skip number of results
     * - $expand: Expand related resources
     * - $search: Search query
     * - $count: Include count of items
     *
     * @param AuthenticationQueryOptions|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return Authentication
     */
    public function get(?AuthenticationQueryOptions $options = null, ?array $queryParameters = null): Authentication
    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, Authentication::class);
    }

    /**
     * Create a new Authentication
     *
     * @param Authentication $item The item to create
     * @return Authentication
     */
    public function post(Authentication $item): Authentication
    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, Authentication::class);
    }
    /**
     * Get emailMethods request builder
     *
     * @return EmailMethodsRequestBuilder
     */
    public function emailMethods(): EmailMethodsRequestBuilder
    {
        return new EmailMethodsRequestBuilder($this->client, $this->buildPath('emailMethods'));
    }

    /**
     * Get fido2Methods request builder
     *
     * @return Fido2MethodsRequestBuilder
     */
    public function fido2Methods(): Fido2MethodsRequestBuilder
    {
        return new Fido2MethodsRequestBuilder($this->client, $this->buildPath('fido2Methods'));
    }

    /**
     * Get methods request builder
     *
     * @return MethodsRequestBuilder
     */
    public function methods(): MethodsRequestBuilder
    {
        return new MethodsRequestBuilder($this->client, $this->buildPath('methods'));
    }

    /**
     * Get microsoftAuthenticatorMethods request builder
     *
     * @return MicrosoftAuthenticatorMethodsRequestBuilder
     */
    public function microsoftAuthenticatorMethods(): MicrosoftAuthenticatorMethodsRequestBuilder
    {
        return new MicrosoftAuthenticatorMethodsRequestBuilder($this->client, $this->buildPath('microsoftAuthenticatorMethods'));
    }

    /**
     * Get operations request builder
     *
     * @return OperationsRequestBuilder
     */
    public function operations(): OperationsRequestBuilder
    {
        return new OperationsRequestBuilder($this->client, $this->buildPath('operations'));
    }

    /**
     * Get passwordMethods request builder
     *
     * @return PasswordMethodsRequestBuilder
     */
    public function passwordMethods(): PasswordMethodsRequestBuilder
    {
        return new PasswordMethodsRequestBuilder($this->client, $this->buildPath('passwordMethods'));
    }

    /**
     * Get phoneMethods request builder
     *
     * @return PhoneMethodsRequestBuilder
     */
    public function phoneMethods(): PhoneMethodsRequestBuilder
    {
        return new PhoneMethodsRequestBuilder($this->client, $this->buildPath('phoneMethods'));
    }

    /**
     * Get platformCredentialMethods request builder
     *
     * @return PlatformCredentialMethodsRequestBuilder
     */
    public function platformCredentialMethods(): PlatformCredentialMethodsRequestBuilder
    {
        return new PlatformCredentialMethodsRequestBuilder($this->client, $this->buildPath('platformCredentialMethods'));
    }

    /**
     * Get softwareOathMethods request builder
     *
     * @return SoftwareOathMethodsRequestBuilder
     */
    public function softwareOathMethods(): SoftwareOathMethodsRequestBuilder
    {
        return new SoftwareOathMethodsRequestBuilder($this->client, $this->buildPath('softwareOathMethods'));
    }

    /**
     * Get temporaryAccessPassMethods request builder
     *
     * @return TemporaryAccessPassMethodsRequestBuilder
     */
    public function temporaryAccessPassMethods(): TemporaryAccessPassMethodsRequestBuilder
    {
        return new TemporaryAccessPassMethodsRequestBuilder($this->client, $this->buildPath('temporaryAccessPassMethods'));
    }

    /**
     * Get windowsHelloForBusinessMethods request builder
     *
     * @return WindowsHelloForBusinessMethodsRequestBuilder
     */
    public function windowsHelloForBusinessMethods(): WindowsHelloForBusinessMethodsRequestBuilder
    {
        return new WindowsHelloForBusinessMethodsRequestBuilder($this->client, $this->buildPath('windowsHelloForBusinessMethods'));
    }

}
