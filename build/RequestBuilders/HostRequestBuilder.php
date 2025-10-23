<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityHost;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ChildHostPairsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ComponentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\CookiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\HostPairsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ParentHostPairsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PassiveDnsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PassiveDnsReverseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\PortsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ReputationRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SslCertificatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SubdomainsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TrackersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\WhoisRequestBuilder;

/**
 * Request builder for {host-id}
 */
class HostRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get host
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityHost
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityHost
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SecurityHost
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SecurityHost($data);
    }
    /**
     * Update the navigation property hosts in security
     * @param SecurityHost $body Request body
     * @return SecurityHost
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityHost $body): SecurityHost
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityHost
     */
    private function deserializePatch(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new SecurityHost($data);
    }
    /**
     * Delete navigation property hosts for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null) {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return $data;
    }
    /**
     * Navigate to childHostPairs
     *
     * @return ChildHostPairsRequestBuilder
     */
    public function childHostPairs(): ChildHostPairsRequestBuilder
    {
        return new ChildHostPairsRequestBuilder($this->client, $this->requestUrl . '/childHostPairs');
    }
    /**
     * Navigate to components
     *
     * @return ComponentsRequestBuilder
     */
    public function components(): ComponentsRequestBuilder
    {
        return new ComponentsRequestBuilder($this->client, $this->requestUrl . '/components');
    }
    /**
     * Navigate to cookies
     *
     * @return CookiesRequestBuilder
     */
    public function cookies(): CookiesRequestBuilder
    {
        return new CookiesRequestBuilder($this->client, $this->requestUrl . '/cookies');
    }
    /**
     * Navigate to hostPairs
     *
     * @return HostPairsRequestBuilder
     */
    public function hostPairs(): HostPairsRequestBuilder
    {
        return new HostPairsRequestBuilder($this->client, $this->requestUrl . '/hostPairs');
    }
    /**
     * Navigate to parentHostPairs
     *
     * @return ParentHostPairsRequestBuilder
     */
    public function parentHostPairs(): ParentHostPairsRequestBuilder
    {
        return new ParentHostPairsRequestBuilder($this->client, $this->requestUrl . '/parentHostPairs');
    }
    /**
     * Navigate to passiveDns
     *
     * @return PassiveDnsRequestBuilder
     */
    public function passiveDns(): PassiveDnsRequestBuilder
    {
        return new PassiveDnsRequestBuilder($this->client, $this->requestUrl . '/passiveDns');
    }
    /**
     * Navigate to passiveDnsReverse
     *
     * @return PassiveDnsReverseRequestBuilder
     */
    public function passiveDnsReverse(): PassiveDnsReverseRequestBuilder
    {
        return new PassiveDnsReverseRequestBuilder($this->client, $this->requestUrl . '/passiveDnsReverse');
    }
    /**
     * Navigate to ports
     *
     * @return PortsRequestBuilder
     */
    public function ports(): PortsRequestBuilder
    {
        return new PortsRequestBuilder($this->client, $this->requestUrl . '/ports');
    }
    /**
     * Navigate to reputation
     *
     * @return ReputationRequestBuilder
     */
    public function reputation(): ReputationRequestBuilder
    {
        return new ReputationRequestBuilder($this->client, $this->requestUrl . '/reputation');
    }
    /**
     * Navigate to sslCertificates
     *
     * @return SslCertificatesRequestBuilder
     */
    public function sslCertificates(): SslCertificatesRequestBuilder
    {
        return new SslCertificatesRequestBuilder($this->client, $this->requestUrl . '/sslCertificates');
    }
    /**
     * Navigate to subdomains
     *
     * @return SubdomainsRequestBuilder
     */
    public function subdomains(): SubdomainsRequestBuilder
    {
        return new SubdomainsRequestBuilder($this->client, $this->requestUrl . '/subdomains');
    }
    /**
     * Navigate to trackers
     *
     * @return TrackersRequestBuilder
     */
    public function trackers(): TrackersRequestBuilder
    {
        return new TrackersRequestBuilder($this->client, $this->requestUrl . '/trackers');
    }
    /**
     * Navigate to whois
     *
     * @return WhoisRequestBuilder
     */
    public function whois(): WhoisRequestBuilder
    {
        return new WhoisRequestBuilder($this->client, $this->requestUrl . '/whois');
    }
}
