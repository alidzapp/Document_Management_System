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
 * The "channels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YoutubeService(...);
 *   $channels = $youtubeService->channels;
 *  </code>
 */
class Google_ChannelsServiceResource extends Google_ServiceResource
{


    /**
     * Browse the YouTube channel collection. Either the 'id' or 'mine' parameter must be set.
     * (channels.list)
     *
     * @param string $part Parts of the channel resource to be returned.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string id YouTube IDs of the channels to be returned.
     * @opt_param string mine Flag indicating only return the channel ids of the authenticated user.
     * @return Google_ChannelListResponse
     */
    public function listChannels($part, $optParams = array())
    {
        $params = array('part' => $part);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_ChannelListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "search" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YoutubeService(...);
 *   $search = $youtubeService->search;
 *  </code>
 */
class Google_SearchServiceResource extends Google_ServiceResource
{


    /**
     * Universal search for youtube. (search.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string q Query to search in Youtube.
     * @opt_param string startIndex Index of the first search result to return.
     * @opt_param string type Type of resource to search.
     * @opt_param string order Sort order.
     * @opt_param string maxResults Maximum number of search results to return per page.
     * @return Google_SearchListResponse
     */
    public function listSearch($optParams = array())
    {
        $params = array();
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_SearchListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "playlistitems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YoutubeService(...);
 *   $playlistitems = $youtubeService->playlistitems;
 *  </code>
 */
class Google_PlaylistitemsServiceResource extends Google_ServiceResource
{


    /**
     * Browse the YouTube playlist collection. (playlistitems.list)
     *
     * @param string $part Parts of the playlist resource to be returned.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string startIndex Index of the first element to return (starts at 0)
     * @opt_param string playlistId Retrieves playlist items from the given playlist id.
     * @opt_param string id YouTube IDs of the playlists to be returned.
     * @opt_param string maxResults Maximum number of results to return
     * @return Google_PlaylistItemListResponse
     */
    public function listPlaylistitems($part, $optParams = array())
    {
        $params = array('part' => $part);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_PlaylistItemListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "playlists" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YoutubeService(...);
 *   $playlists = $youtubeService->playlists;
 *  </code>
 */
class Google_PlaylistsServiceResource extends Google_ServiceResource
{


    /**
     * Browse the YouTube playlist collection. (playlists.list)
     *
     * @param string $id YouTube IDs of the playlists to be returned.
     * @param string $part Parts of the playlist resource to be returned.
     * @param array $optParams Optional parameters.
     * @return Google_PlaylistListResponse
     */
    public function listPlaylists($id, $part, $optParams = array())
    {
        $params = array('id' => $id, 'part' => $part);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_PlaylistListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * The "videos" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_YoutubeService(...);
 *   $videos = $youtubeService->videos;
 *  </code>
 */
class Google_VideosServiceResource extends Google_ServiceResource
{


    /**
     * Browse the YouTube video collection. (videos.list)
     *
     * @param string $id YouTube IDs of the videos to be returned.
     * @param string $part Parts of the video resource to be returned.
     * @param array $optParams Optional parameters.
     * @return Google_VideoListResponse
     */
    public function listVideos($id, $part, $optParams = array())
    {
        $params = array('id' => $id, 'part' => $part);
        $params = array_merge($params, $optParams);
        $data = $this->__call('list', array($params));
        if ($this->useObjects()) {
            return new Google_VideoListResponse($data);
        } else {
            return $data;
        }
    }
}

/**
 * Service definition for Google_Youtube (v3alpha).
 *
 * <p>
 * Programmatic access to YouTube features.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/youtube" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_YoutubeService extends Google_Service
{
    public $channels;
    public $search;
    public $playlistitems;
    public $playlists;
    public $videos;

    /**
     * Constructs the internal representation of the Youtube service.
     *
     * @param Google_Client $client
     */
    public function __construct(Google_Client $client)
    {
        $this->servicePath = 'youtube/v3alpha/';
        $this->version = 'v3alpha';
        $this->serviceName = 'youtube';

        $client->addService($this->serviceName, $this->version);
        $this->channels = new Google_ChannelsServiceResource($this, $this->serviceName, 'channels', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/youtube"], "parameters": {"part": {"required": true, "type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "mine": {"type": "string", "location": "query"}}, "id": "youtube.channels.list", "httpMethod": "GET", "path": "channels", "response": {"$ref": "ChannelListResponse"}}}}', true));
        $this->search = new Google_SearchServiceResource($this, $this->serviceName, 'search', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/youtube"], "parameters": {"q": {"type": "string", "location": "query"}, "startIndex": {"format": "uint32", "default": "0", "maximum": "1000", "minimum": "0", "location": "query", "type": "integer"}, "type": {"repeated": true, "enum": ["channel", "playlist", "video"], "type": "string", "location": "query"}, "order": {"default": "SEARCH_SORT_RELEVANCE", "enum": ["date", "rating", "relevance", "view_count"], "type": "string", "location": "query"}, "maxResults": {"format": "uint32", "default": "25", "maximum": "50", "minimum": "0", "location": "query", "type": "integer"}}, "response": {"$ref": "SearchListResponse"}, "httpMethod": "GET", "path": "search", "id": "youtube.search.list"}}}', true));
        $this->playlistitems = new Google_PlaylistitemsServiceResource($this, $this->serviceName, 'playlistitems', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/youtube"], "parameters": {"startIndex": {"minimum": "0", "type": "integer", "location": "query", "format": "uint32"}, "part": {"required": true, "type": "string", "location": "query"}, "playlistId": {"type": "string", "location": "query"}, "id": {"type": "string", "location": "query"}, "maxResults": {"default": "50", "minimum": "0", "type": "integer", "location": "query", "format": "uint32"}}, "id": "youtube.playlistitems.list", "httpMethod": "GET", "path": "playlistitems", "response": {"$ref": "PlaylistItemListResponse"}}}}', true));
        $this->playlists = new Google_PlaylistsServiceResource($this, $this->serviceName, 'playlists', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/youtube"], "parameters": {"part": {"required": true, "type": "string", "location": "query"}, "id": {"required": true, "type": "string", "location": "query"}}, "id": "youtube.playlists.list", "httpMethod": "GET", "path": "playlists", "response": {"$ref": "PlaylistListResponse"}}}}', true));
        $this->videos = new Google_VideosServiceResource($this, $this->serviceName, 'videos', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/youtube"], "parameters": {"part": {"required": true, "type": "string", "location": "query"}, "id": {"required": true, "type": "string", "location": "query"}}, "id": "youtube.videos.list", "httpMethod": "GET", "path": "videos", "response": {"$ref": "VideoListResponse"}}}}', true));

    }
}

class Google_Channel extends Google_Model
{
    public $kind;
    public $statistics;
    public $contentDetails;
    public $snippet;
    public $etag;
    public $id;
    protected $__statisticsType = 'Google_ChannelStatistics';
    protected $__statisticsDataType = '';
    protected $__contentDetailsType = 'Google_ChannelContentDetails';
    protected $__contentDetailsDataType = '';
    protected $__snippetType = 'Google_ChannelSnippet';
    protected $__snippetDataType = '';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function setStatistics(Google_ChannelStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    public function setContentDetails(Google_ChannelContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet(Google_ChannelSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

class Google_ChannelContentDetails extends Google_Model
{
    public $privacyStatus;
    public $uploads;

    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }

    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    public function getUploads()
    {
        return $this->uploads;
    }

    public function setUploads($uploads)
    {
        $this->uploads = $uploads;
    }
}

class Google_ChannelListResponse extends Google_Model
{
    public $channels;
    public $kind;
    public $etag;
    protected $__channelsType = 'Google_Channel';
    protected $__channelsDataType = 'map';

    public function getChannels()
    {
        return $this->channels;
    }

    public function setChannels(Google_Channel $channels)
    {
        $this->channels = $channels;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
}

class Google_ChannelSnippet extends Google_Model
{
    public $title;
    public $description;
    public $thumbnails;
    protected $__thumbnailsType = 'Google_Thumbnail';
    protected $__thumbnailsDataType = 'map';

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    public function setThumbnails(Google_Thumbnail $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }
}

class Google_ChannelStatistics extends Google_Model
{
    public $commentCount;
    public $subscriberCount;
    public $videoCount;
    public $viewCount;

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    public function getSubscriberCount()
    {
        return $this->subscriberCount;
    }

    public function setSubscriberCount($subscriberCount)
    {
        $this->subscriberCount = $subscriberCount;
    }

    public function getVideoCount()
    {
        return $this->videoCount;
    }

    public function setVideoCount($videoCount)
    {
        $this->videoCount = $videoCount;
    }

    public function getViewCount()
    {
        return $this->viewCount;
    }

    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }
}

class Google_PageInfo extends Google_Model
{
    public $totalResults;
    public $startIndex;
    public $resultPerPage;

    public function getTotalResults()
    {
        return $this->totalResults;
    }

    public function setTotalResults($totalResults)
    {
        $this->totalResults = $totalResults;
    }

    public function getStartIndex()
    {
        return $this->startIndex;
    }

    public function setStartIndex($startIndex)
    {
        $this->startIndex = $startIndex;
    }

    public function getResultPerPage()
    {
        return $this->resultPerPage;
    }

    public function setResultPerPage($resultPerPage)
    {
        $this->resultPerPage = $resultPerPage;
    }
}

class Google_Playlist extends Google_Model
{
    public $snippet;
    public $kind;
    public $etag;
    public $id;
    protected $__snippetType = 'Google_PlaylistSnippet';
    protected $__snippetDataType = '';

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet(Google_PlaylistSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

class Google_PlaylistItem extends Google_Model
{
    public $snippet;
    public $kind;
    public $etag;
    public $id;
    protected $__snippetType = 'Google_PlaylistItemSnippet';
    protected $__snippetDataType = '';

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet(Google_PlaylistItemSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

class Google_PlaylistItemListResponse extends Google_Model
{
    public $playlistItems;
    public $kind;
    public $etag;
    protected $__playlistItemsType = 'Google_PlaylistItem';
    protected $__playlistItemsDataType = 'map';

    public function getPlaylistItems()
    {
        return $this->playlistItems;
    }

    public function setPlaylistItems(Google_PlaylistItem $playlistItems)
    {
        $this->playlistItems = $playlistItems;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }
}

class Google_PlaylistItemSnippet extends Google_Model
{
    public $playlistId;
    public $description;
    public $title;
    public $resourceId;
    public $channelId;
    public $publishedAt;
    public $position;
    protected $__resourceIdType = 'Google_ResourceId';
    protected $__resourceIdDataType = '';

    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getResourceId()
    {
        return $this->resourceId;
    }

    public function setResourceId(Google_ResourceId $resourceId)
    {
        $this->resourceId = $resourceId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
}

class Google_PlaylistListResponse extends Google_Model
{
    public $kind;
    public $etag;
    public $playlists;
    protected $__playlistsType = 'Google_Playlist';
    protected $__playlistsDataType = 'map';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getPlaylists()
    {
        return $this->playlists;
    }

    public function setPlaylists(Google_Playlist $playlists)
    {
        $this->playlists = $playlists;
    }
}

class Google_PlaylistSnippet extends Google_Model
{
    public $title;
    public $channelId;
    public $description;
    public $publishedAt;
    public $tags;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags(/* array(Google_string) */
        $tags)
    {
        $this->assertIsArray($tags, 'Google_string', __METHOD__);
        $this->tags = $tags;
    }
}

class Google_ResourceId extends Google_Model
{
    public $kind;
    public $channelId;
    public $playlistId;
    public $videoId;

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    public function getPlaylistId()
    {
        return $this->playlistId;
    }

    public function setPlaylistId($playlistId)
    {
        $this->playlistId = $playlistId;
    }

    public function getVideoId()
    {
        return $this->videoId;
    }

    public function setVideoId($videoId)
    {
        $this->videoId = $videoId;
    }
}

class Google_SearchListResponse extends Google_Model
{
    public $searchResults;
    public $kind;
    public $etag;
    public $pageInfo;
    protected $__searchResultsType = 'Google_SearchResult';
    protected $__searchResultsDataType = 'array';
    protected $__pageInfoType = 'Google_PageInfo';
    protected $__pageInfoDataType = '';

    public function getSearchResults()
    {
        return $this->searchResults;
    }

    public function setSearchResults(/* array(Google_SearchResult) */
        $searchResults)
    {
        $this->assertIsArray($searchResults, 'Google_SearchResult', __METHOD__);
        $this->searchResults = $searchResults;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getPageInfo()
    {
        return $this->pageInfo;
    }

    public function setPageInfo(Google_PageInfo $pageInfo)
    {
        $this->pageInfo = $pageInfo;
    }
}

class Google_SearchResult extends Google_Model
{
    public $snippet;
    public $kind;
    public $etag;
    public $id;
    protected $__snippetType = 'Google_SearchResultSnippet';
    protected $__snippetDataType = '';
    protected $__idType = 'Google_ResourceId';
    protected $__idDataType = '';

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet(Google_SearchResultSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId(Google_ResourceId $id)
    {
        $this->id = $id;
    }
}

class Google_SearchResultSnippet extends Google_Model
{
    public $channelId;
    public $description;
    public $publishedAt;
    public $title;

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}

class Google_Thumbnail extends Google_Model
{
    public $url;

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }
}

class Google_Video extends Google_Model
{
    public $status;
    public $kind;
    public $statistics;
    public $contentDetails;
    public $snippet;
    public $player;
    public $etag;
    public $id;
    protected $__statusType = 'Google_VideoStatus';
    protected $__statusDataType = '';
    protected $__statisticsType = 'Google_VideoStatistics';
    protected $__statisticsDataType = '';
    protected $__contentDetailsType = 'Google_VideoContentDetails';
    protected $__contentDetailsDataType = '';
    protected $__snippetType = 'Google_VideoSnippet';
    protected $__snippetDataType = '';
    protected $__playerType = 'Google_VideoPlayer';
    protected $__playerDataType = '';

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus(Google_VideoStatus $status)
    {
        $this->status = $status;
    }

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getStatistics()
    {
        return $this->statistics;
    }

    public function setStatistics(Google_VideoStatistics $statistics)
    {
        $this->statistics = $statistics;
    }

    public function getContentDetails()
    {
        return $this->contentDetails;
    }

    public function setContentDetails(Google_VideoContentDetails $contentDetails)
    {
        $this->contentDetails = $contentDetails;
    }

    public function getSnippet()
    {
        return $this->snippet;
    }

    public function setSnippet(Google_VideoSnippet $snippet)
    {
        $this->snippet = $snippet;
    }

    public function getPlayer()
    {
        return $this->player;
    }

    public function setPlayer(Google_VideoPlayer $player)
    {
        $this->player = $player;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
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

class Google_VideoContentDetails extends Google_Model
{
    public $duration;
    public $aspectRatio;

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getAspectRatio()
    {
        return $this->aspectRatio;
    }

    public function setAspectRatio($aspectRatio)
    {
        $this->aspectRatio = $aspectRatio;
    }
}

class Google_VideoListResponse extends Google_Model
{
    public $kind;
    public $etag;
    public $videos;
    protected $__videosType = 'Google_Video';
    protected $__videosDataType = 'map';

    public function getKind()
    {
        return $this->kind;
    }

    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    public function getEtag()
    {
        return $this->etag;
    }

    public function setEtag($etag)
    {
        $this->etag = $etag;
    }

    public function getVideos()
    {
        return $this->videos;
    }

    public function setVideos(Google_Video $videos)
    {
        $this->videos = $videos;
    }
}

class Google_VideoPlayer extends Google_Model
{
    public $embedHtml;

    public function getEmbedHtml()
    {
        return $this->embedHtml;
    }

    public function setEmbedHtml($embedHtml)
    {
        $this->embedHtml = $embedHtml;
    }
}

class Google_VideoSnippet extends Google_Model
{
    public $thumbnails;
    public $tags;
    public $channelId;
    public $publishedAt;
    public $title;
    public $categoryId;
    public $description;
    protected $__thumbnailsType = 'Google_Thumbnail';
    protected $__thumbnailsDataType = 'map';

    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    public function setThumbnails(Google_Thumbnail $thumbnails)
    {
        $this->thumbnails = $thumbnails;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags(/* array(Google_string) */
        $tags)
    {
        $this->assertIsArray($tags, 'Google_string', __METHOD__);
        $this->tags = $tags;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    public function setChannelId($channelId)
    {
        $this->channelId = $channelId;
    }

    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

class Google_VideoStatistics extends Google_Model
{
    public $commentCount;
    public $viewCount;
    public $favoriteCount;
    public $dislikeCount;
    public $likeCount;

    public function getCommentCount()
    {
        return $this->commentCount;
    }

    public function setCommentCount($commentCount)
    {
        $this->commentCount = $commentCount;
    }

    public function getViewCount()
    {
        return $this->viewCount;
    }

    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    public function getFavoriteCount()
    {
        return $this->favoriteCount;
    }

    public function setFavoriteCount($favoriteCount)
    {
        $this->favoriteCount = $favoriteCount;
    }

    public function getDislikeCount()
    {
        return $this->dislikeCount;
    }

    public function setDislikeCount($dislikeCount)
    {
        $this->dislikeCount = $dislikeCount;
    }

    public function getLikeCount()
    {
        return $this->likeCount;
    }

    public function setLikeCount($likeCount)
    {
        $this->likeCount = $likeCount;
    }
}

class Google_VideoStatus extends Google_Model
{
    public $privacyStatus;
    public $uploadStatus;
    public $rejectionReason;
    public $failureReason;

    public function getPrivacyStatus()
    {
        return $this->privacyStatus;
    }

    public function setPrivacyStatus($privacyStatus)
    {
        $this->privacyStatus = $privacyStatus;
    }

    public function getUploadStatus()
    {
        return $this->uploadStatus;
    }

    public function setUploadStatus($uploadStatus)
    {
        $this->uploadStatus = $uploadStatus;
    }

    public function getRejectionReason()
    {
        return $this->rejectionReason;
    }

    public function setRejectionReason($rejectionReason)
    {
        $this->rejectionReason = $rejectionReason;
    }

    public function getFailureReason()
    {
        return $this->failureReason;
    }

    public function setFailureReason($failureReason)
    {
        $this->failureReason = $failureReason;
    }
}
