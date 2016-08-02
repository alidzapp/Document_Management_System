<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * The "pagespeedapi" collection of methods.
 * Typical usage is:
 *  <code>
 *   $pagespeedonlineService = new Google_PagespeedonlineService(...);
 *   $pagespeedapi = $pagespeedonlineService->pagespeedapi;
 *  </code>
 */
class Google_PagespeedapiServiceResource extends Google_ServiceResource
{


    /**
     * Runs Page Speed analysis on the page at the specified URL, and returns a Page Speed score, a list
     * of suggestions to make that page faster, and other information. (pagespeedapi.runpagespeed)
     *
     * @param string $url The URL to fetch and analyze
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale The locale used to localize formatted results
     * @opt_param string rule A Page Speed rule to run; if none are given, all rules are run
     * @opt_param string strategy The analysis strategy to use
     * @return Google_Result
     */
    public function runpagespeed($url, $optParams = array())
    {
        $params = array('url' => $url);
        $params = array_merge($params, $optParams);
        $data = $this->__call('runpagespeed', array($params));
        if ($this->useObjects()) {
            return new Google_Result($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Pagespeedonline (v1).
 *
 * <p>
 * Lets you analyze the performance of a web page and get tailored suggestions to make that page faster.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://code.google.com/apis/pagespeedonline/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_PagespeedonlineService extends Google_Service
{
    public $pagespeedapi;

    /**
     * Constructs the internal representation of the Pagespeedonline service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'pagespeedonline/v1/';
        $this->version = 'v1';
        $this->serviceName = 'pagespeedonline';

        $client->addService($this->serviceName, $this->version);
        $this->pagespeedapi = new Google_PagespeedapiServiceResource($this, $this->serviceName, 'pagespeedapi', json_decode('{"methods": {"runpagespeed": {"httpMethod": "GET", "response": {"$ref": "Result"}, "id": "pagespeedonline.pagespeedapi.runpagespeed", "parameters": {"locale": {"type": "string", "location": "query"}, "url": {"required": true, "type": "string", "location": "query"}, "rule": {"repeated": true, "type": "string", "location": "query"}, "strategy": {"enum": ["desktop", "mobile"], "type": "string", "location": "query"}}, "path": "runPagespeed"}}}', true));

    }
}

class Google_Result extends Google_Model
{
    public $kind;
    public $formattedResults;
    public $title;
    public $version;
    public $score;
    public $responseCode;
    public $invalidRules;
    public $pageStats;
    public $id;
    protected $__formattedResultsType = 'Google_ResultFormattedResults';
    protected $__formattedResultsDataType = '';
    protected $__versionType = 'Google_ResultVersion';
    protected $__versionDataType = '';
    protected $__pageStatsType = 'Google_ResultPageStats';
    protected $__pageStatsDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getFormattedResults()
    {
        return $this->formattedResults;
    }

    public function setFormattedResults(Google_ResultFormattedResults $formattedResults)
    {
        $this->formattedResults = $formattedResults;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion(Google_ResultVersion $version)
    {
        $this->version = $version;
    }

    public function getScore()
    {
        return $this->score;
    }

    public function setScore($score)
    {
        $this->score = $score;
    }

    public function getResponseCode()
    {
        return $this->responseCode;
    }

    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;
    }

    public function getInvalidRules()
    {
        return $this->invalidRules;
    }

    public function setInvalidRules(/* array(Google_string) */
        $invalidRules)
    {
        $this->assertIsArray($invalidRules, 'Google_string', __METHOD__);
        $this->invalidRules = $invalidRules;
    }

    public function getPageStats()
    {
        return $this->pageStats;
    }

    public function setPageStats(Google_ResultPageStats $pageStats)
    {
        $this->pageStats = $pageStats;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}

class Google_ResultFormattedResults extends Google_Model
{
    public $locale;
    public $ruleResults;
    protected $__ruleResultsType = 'Google_ResultFormattedResultsRuleResults';
    protected $__ruleResultsDataType = 'map';

    public function getLocale()
    {
        return $this->locale;
    }

    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    public function getRuleResults()
    {
        return $this->ruleResults;
    }

    public function setRuleResults(Google_ResultFormattedResultsRuleResults $ruleResults)
    {
        $this->ruleResults = $ruleResults;
    }
}

class Google_ResultFormattedResultsRuleResults extends Google_Model
{
    public $localizedRuleName;
    public $urlBlocks;
    public $ruleScore;
    public $ruleImpact;
    protected $__urlBlocksType = 'Google_ResultFormattedResultsRuleResultsUrlBlocks';
    protected $__urlBlocksDataType = 'array';

    public function getLocalizedRuleName()
    {
        return $this->localizedRuleName;
    }

    public function setLocalizedRuleName($localizedRuleName)
    {
        $this->localizedRuleName = $localizedRuleName;
    }

    public function getUrlBlocks()
    {
        return $this->urlBlocks;
    }

    public function setUrlBlocks(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocks) */
        $urlBlocks)
    {
        $this->assertIsArray($urlBlocks, 'Google_ResultFormattedResultsRuleResultsUrlBlocks', __METHOD__);
        $this->urlBlocks = $urlBlocks;
    }

    public function getRuleScore()
    {
        return $this->ruleScore;
    }

    public function setRuleScore($ruleScore)
    {
        $this->ruleScore = $ruleScore;
    }

    public function getRuleImpact()
    {
        return $this->ruleImpact;
    }

    public function setRuleImpact($ruleImpact)
    {
        $this->ruleImpact = $ruleImpact;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocks extends Google_Model
{
    public $header;
    public $urls;
    protected $__headerType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeader';
    protected $__headerDataType = '';
    protected $__urlsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrls';
    protected $__urlsDataType = 'array';

    public function getHeader()
    {
        return $this->header;
    }

    public function setHeader(Google_ResultFormattedResultsRuleResultsUrlBlocksHeader $header)
    {
        $this->header = $header;
    }

    public function getUrls()
    {
        return $this->urls;
    }

    public function setUrls(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocksUrls) */
        $urls)
    {
        $this->assertIsArray($urls, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrls', __METHOD__);
        $this->urls = $urls;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksHeader extends Google_Model
{
    public $args;
    public $format;
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs';
    protected $__argsDataType = 'array';

    public function getArgs()
    {
        return $this->args;
    }

    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs', __METHOD__);
        $this->args = $args;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksHeaderArgs extends Google_Model
{
    public $type;
    public $value;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrls extends Google_Model
{
    public $details;
    public $result;
    protected $__detailsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails';
    protected $__detailsDataType = 'array';
    protected $__resultType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult';
    protected $__resultDataType = '';

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails) */
        $details)
    {
        $this->assertIsArray($details, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails', __METHOD__);
        $this->details = $details;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult(Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult $result)
    {
        $this->result = $result;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetails extends Google_Model
{
    public $args;
    public $format;
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs';
    protected $__argsDataType = 'array';

    public function getArgs()
    {
        return $this->args;
    }

    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs', __METHOD__);
        $this->args = $args;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsDetailsArgs extends Google_Model
{
    public $type;
    public $value;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResult extends Google_Model
{
    public $args;
    public $format;
    protected $__argsType = 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs';
    protected $__argsDataType = 'array';

    public function getArgs()
    {
        return $this->args;
    }

    public function setArgs(/* array(Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs) */
        $args)
    {
        $this->assertIsArray($args, 'Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs', __METHOD__);
        $this->args = $args;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }
}

class Google_ResultFormattedResultsRuleResultsUrlBlocksUrlsResultArgs extends Google_Model
{
    public $type;
    public $value;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}

class Google_ResultPageStats extends Google_Model
{
    public $otherResponseBytes;
    public $flashResponseBytes;
    public $totalRequestBytes;
    public $numberCssResources;
    public $numberResources;
    public $cssResponseBytes;
    public $javascriptResponseBytes;
    public $imageResponseBytes;
    public $numberHosts;
    public $numberStaticResources;
    public $htmlResponseBytes;
    public $numberJsResources;
    public $textResponseBytes;

    public function getOtherResponseBytes()
    {
        return $this->otherResponseBytes;
    }

    public function setOtherResponseBytes($otherResponseBytes)
    {
        $this->otherResponseBytes = $otherResponseBytes;
    }

    public function getFlashResponseBytes()
    {
        return $this->flashResponseBytes;
    }

    public function setFlashResponseBytes($flashResponseBytes)
    {
        $this->flashResponseBytes = $flashResponseBytes;
    }

    public function getTotalRequestBytes()
    {
        return $this->totalRequestBytes;
    }

    public function setTotalRequestBytes($totalRequestBytes)
    {
        $this->totalRequestBytes = $totalRequestBytes;
    }

    public function getNumberCssResources()
    {
        return $this->numberCssResources;
    }

    public function setNumberCssResources($numberCssResources)
    {
        $this->numberCssResources = $numberCssResources;
    }

    public function getNumberResources()
    {
        return $this->numberResources;
    }

    public function setNumberResources($numberResources)
    {
        $this->numberResources = $numberResources;
    }

    public function getCssResponseBytes()
    {
        return $this->cssResponseBytes;
    }

    public function setCssResponseBytes($cssResponseBytes)
    {
        $this->cssResponseBytes = $cssResponseBytes;
    }

    public function getJavascriptResponseBytes()
    {
        return $this->javascriptResponseBytes;
    }

    public function setJavascriptResponseBytes($javascriptResponseBytes)
    {
        $this->javascriptResponseBytes = $javascriptResponseBytes;
    }

    public function getImageResponseBytes()
    {
        return $this->imageResponseBytes;
    }

    public function setImageResponseBytes($imageResponseBytes)
    {
        $this->imageResponseBytes = $imageResponseBytes;
    }

    public function getNumberHosts()
    {
        return $this->numberHosts;
    }

    public function setNumberHosts($numberHosts)
    {
        $this->numberHosts = $numberHosts;
    }

    public function getNumberStaticResources()
    {
        return $this->numberStaticResources;
    }

    public function setNumberStaticResources($numberStaticResources)
    {
        $this->numberStaticResources = $numberStaticResources;
    }

    public function getHtmlResponseBytes()
    {
        return $this->htmlResponseBytes;
    }

    public function setHtmlResponseBytes($htmlResponseBytes)
    {
        $this->htmlResponseBytes = $htmlResponseBytes;
    }

    public function getNumberJsResources()
    {
        return $this->numberJsResources;
    }

    public function setNumberJsResources($numberJsResources)
    {
        $this->numberJsResources = $numberJsResources;
    }

    public function getTextResponseBytes()
    {
        return $this->textResponseBytes;
    }

    public function setTextResponseBytes($textResponseBytes)
    {
        $this->textResponseBytes = $textResponseBytes;
    }
}

class Google_ResultVersion extends Google_Model
{
    public $major;
    public $minor;

    public function getMajor()
    {
        return $this->major;
    }

    public function setMajor($major)
    {
        $this->major = $major;
    }

    public function getMinor()
    {
        return $this->minor;
    }

    public function setMinor($minor)
    {
        $this->minor = $minor;
    }
}
