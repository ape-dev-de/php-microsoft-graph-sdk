<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\SecurityThreatIntelligence;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\ArticleIndicatorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\ArticlesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostComponentsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostCookiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostPairsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostPortsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostSslCertificatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\HostTrackersRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\IntelligenceProfileIndicatorsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\IntelProfilesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\PassiveDnsRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\SslCertificatesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\SubdomainsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\VulnerabilitiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\WhoisHistoryRecordsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Security\ThreatIntelligence\WhoisRecordsRequestBuilder;

/**
 * Request builder for /security/threatIntelligence
 */
class ThreatIntelligenceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get threatIntelligence from security
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return SecurityThreatIntelligence
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): SecurityThreatIntelligence
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to SecurityThreatIntelligence
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
        return new SecurityThreatIntelligence($data);
    }
    /**
     * Update the navigation property threatIntelligence in security
     * @param SecurityThreatIntelligence $body Request body
     * @return SecurityThreatIntelligence
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(SecurityThreatIntelligence $body): SecurityThreatIntelligence
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->patch($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to SecurityThreatIntelligence
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
        return new SecurityThreatIntelligence($data);
    }
    /**
     * Delete navigation property threatIntelligence for security
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
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
     * Navigate to articleIndicators
     *
     * @return ArticleIndicatorsRequestBuilder
     */
    public function articleIndicators(): ArticleIndicatorsRequestBuilder
    {
        return new ArticleIndicatorsRequestBuilder($this->client, $this->requestUrl . '/articleIndicators');
    }
    /**
     * Navigate to articles
     *
     * @return ArticlesRequestBuilder
     */
    public function articles(): ArticlesRequestBuilder
    {
        return new ArticlesRequestBuilder($this->client, $this->requestUrl . '/articles');
    }
    /**
     * Navigate to hostComponents
     *
     * @return HostComponentsRequestBuilder
     */
    public function hostComponents(): HostComponentsRequestBuilder
    {
        return new HostComponentsRequestBuilder($this->client, $this->requestUrl . '/hostComponents');
    }
    /**
     * Navigate to hostCookies
     *
     * @return HostCookiesRequestBuilder
     */
    public function hostCookies(): HostCookiesRequestBuilder
    {
        return new HostCookiesRequestBuilder($this->client, $this->requestUrl . '/hostCookies');
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
     * Navigate to hostPorts
     *
     * @return HostPortsRequestBuilder
     */
    public function hostPorts(): HostPortsRequestBuilder
    {
        return new HostPortsRequestBuilder($this->client, $this->requestUrl . '/hostPorts');
    }
    /**
     * Navigate to hosts
     *
     * @return HostsRequestBuilder
     */
    public function hosts(): HostsRequestBuilder
    {
        return new HostsRequestBuilder($this->client, $this->requestUrl . '/hosts');
    }
    /**
     * Navigate to hostSslCertificates
     *
     * @return HostSslCertificatesRequestBuilder
     */
    public function hostSslCertificates(): HostSslCertificatesRequestBuilder
    {
        return new HostSslCertificatesRequestBuilder($this->client, $this->requestUrl . '/hostSslCertificates');
    }
    /**
     * Navigate to hostTrackers
     *
     * @return HostTrackersRequestBuilder
     */
    public function hostTrackers(): HostTrackersRequestBuilder
    {
        return new HostTrackersRequestBuilder($this->client, $this->requestUrl . '/hostTrackers');
    }
    /**
     * Navigate to intelligenceProfileIndicators
     *
     * @return IntelligenceProfileIndicatorsRequestBuilder
     */
    public function intelligenceProfileIndicators(): IntelligenceProfileIndicatorsRequestBuilder
    {
        return new IntelligenceProfileIndicatorsRequestBuilder($this->client, $this->requestUrl . '/intelligenceProfileIndicators');
    }
    /**
     * Navigate to intelProfiles
     *
     * @return IntelProfilesRequestBuilder
     */
    public function intelProfiles(): IntelProfilesRequestBuilder
    {
        return new IntelProfilesRequestBuilder($this->client, $this->requestUrl . '/intelProfiles');
    }
    /**
     * Navigate to passiveDnsRecords
     *
     * @return PassiveDnsRecordsRequestBuilder
     */
    public function passiveDnsRecords(): PassiveDnsRecordsRequestBuilder
    {
        return new PassiveDnsRecordsRequestBuilder($this->client, $this->requestUrl . '/passiveDnsRecords');
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
     * Navigate to vulnerabilities
     *
     * @return VulnerabilitiesRequestBuilder
     */
    public function vulnerabilities(): VulnerabilitiesRequestBuilder
    {
        return new VulnerabilitiesRequestBuilder($this->client, $this->requestUrl . '/vulnerabilities');
    }
    /**
     * Navigate to whoisHistoryRecords
     *
     * @return WhoisHistoryRecordsRequestBuilder
     */
    public function whoisHistoryRecords(): WhoisHistoryRecordsRequestBuilder
    {
        return new WhoisHistoryRecordsRequestBuilder($this->client, $this->requestUrl . '/whoisHistoryRecords');
    }
    /**
     * Navigate to whoisRecords
     *
     * @return WhoisRecordsRequestBuilder
     */
    public function whoisRecords(): WhoisRecordsRequestBuilder
    {
        return new WhoisRecordsRequestBuilder($this->client, $this->requestUrl . '/whoisRecords');
    }
}
