# PHP QBITTORRENT API

### :warning: :warning: :warning: THIS PACKAGES IS UNDER DEVELOPING

PHP QBITTORRENT API is a Qbittorrent application client for managing qbittorrent applications using Webui API.

|Name| Information |
|---|---|
| Application | QBittorrent |
| Api version| API v2.5.1 |


## Help and docs

We use GitHub issues only to discuss bugs and new features. For support please refer to:

```
comming soon
```

## Installing PHP QBITTORRENT API

The recommended way to install PHP QBITTORRENT API is through
[Composer](https://getcomposer.org/).

```
composer require fatkulnurk/php-qbittorrent-api
```

## Todo:
- [x] Authentication
- [x] Application
- [x] Log
- [x] Sync
- [x] Transfer info
- [ ] Torrent management
- [x] RSS (experimental)
- [x] Search

**Authentication**

| Name | Status Development | Status Testing |
|---|---|---|
| Login | :white_check_mark: | :x:  |
| Logout |  :white_check_mark: | :x: |


**Application**

| Name | Status Development | Status Testing |
|---|---|---|
| Get application version | :white_check_mark: | :x:  |
| Get API version | :white_check_mark: | :x:  |
| Get build info | :white_check_mark: | :x:  |
| Shutdown application | :white_check_mark: | :x:  |
| Get application preferences | :white_check_mark: | :x:  |
| Set application preferences | :white_check_mark: | :x:  |
| Get default save path | :white_check_mark: | :x:  |


**Log**

| Name | Status Development | Status Testing |
|---|---|---|
| Get log | :white_check_mark: | :x:  |
| Get peer log | :white_check_mark: | :x:  |


**Sync**

| Name | Status Development | Status Testing |
|---|---|---|
| Get main data | :white_check_mark: | :x:  |
| Get torrent peers data | :white_check_mark: | :x:  |


**Transfer info**

| Name | Status Development | Status Testing |
|---|---|---|
| Get global transfer info | :white_check_mark: | :x:  |
| Get alternative speed limits state | :white_check_mark: | :x:  |
| Toggle alternative speed limits | :white_check_mark: | :x:  |
| Get global download limit | :white_check_mark: | :x:  |
| Set global download limit | :white_check_mark: | :x:  |
| Get global upload limit | :white_check_mark: | :x:  |
| Set global upload limit | :white_check_mark: | :x:  |
| Ban peers | :white_check_mark: | :x:  |


**Torrent management**

| Name | Status Development | Status Testing |
|---|---|---|
| Get torrent list | :x: | :x:  |
| Get torrent generic properties |  :x: | :x:  |
| Get torrent trackers |  :x: | :x:  |
| Get torrent web seeds |  :x: | :x:  |
| Get torrent contents |  :x: | :x:  |
| Get torrent pieces' states |  :x: | :x:  |
| Get torrent pieces' hashes |  :x: | :x:  |
| Pause torrents |  :x: | :x:  |
| Resume torrents |  :x: | :x:  |
| Delete torrents |  :x: | :x:  |
| Recheck torrents |  :x: | :x:  |
| Reannounce torrents |  :x: | :x:  |
| Edit trackers |  :x: | :x:  |
| Remove trackers |  :x: | :x:  |
| Add peers |  :x: | :x:  |
| Add new torrent |  :x: | :x:  |
| Add trackers to torrent |  :x: | :x:  |
| Increase torrent priority |  :x: | :x:  |
| Decrease torrent priority |  :x: | :x:  |
| Maximal torrent priority |  :x: | :x:  |
| Minimal torrent priority |  :x: | :x:  |
| Set file priority |  :x: | :x:  |
| Get torrent download limit |  :x: | :x:  |
| Set torrent download limit |  :x: | :x:  |
| Set torrent share limit |  :x: | :x:  |
| Get torrent upload limit |  :x: | :x:  |
| Set torrent upload limit |  :x: | :x:  |
| Set torrent location |  :x: | :x:  |
| Set torrent name |  :x: | :x:  |
| Set torrent category |  :x: | :x:  |
| Get all categories |  :x: | :x:  |
| Add new category |  :x: | :x:  |
| Edit category |  :x: | :x:  |
| Remove categories |  :x: | :x:  |
| Add torrent tags |  :x: | :x:  |
| Remove torrent tags |  :x: | :x:  |
| Get all tags |  :x: | :x:  |
| Create tags |  :x: | :x:  |
| Delete tags |  :x: | :x:  |
| Set automatic torrent management |  :x: | :x:  |
| Toggle sequential download |  :x: | :x:  |
| Set first/last piece priority |  :x: | :x:  |
| Set force start |  :x: | :x:  |
| Set super seeding |  :x: | :x:  |
| Rename file |  :x: | :x:  |


**RSS (experimental)**

| Name | Status Development | Status Testing |
|---|---|---|
| Add folder | :white_check_mark: | :x:  |
| Add feed | :white_check_mark: | :x:  |
| Remove item | :white_check_mark: | :x:  |
| Move item | :white_check_mark: | :x:  |
| Get all items | :white_check_mark: | :x:  |
| Mark as read | :white_check_mark: | :x:  |
| Refresh item | :white_check_mark: | :x:  |
| Set auto-downloading rule | :white_check_mark: | :x:  |
| Rename auto-downloading rule | :white_check_mark: | :x:  |
| Remove auto-downloading rule | :white_check_mark: | :x:  |
| Get all auto-downloading rules | :white_check_mark: | :x:  |
| Get all articles matching a rule | :white_check_mark: | :x:  |


**Search**

| Name | Status Development | Status Testing |
|---|---|---|
| Start search | :white_check_mark: | :x:  |
| Stop search | :white_check_mark: | :x:  |
| Get search status | :white_check_mark: | :x:  |
| Get search results | :white_check_mark: | :x:  |
| Delete search | :white_check_mark: | :x:  |
| Get search plugins | :white_check_mark: | :x:  |
| Install search plugin | :white_check_mark:: | :x:  |
| Uninstall search plugin | :white_check_mark: | :x:  |
| Enable search plugin | :white_check_mark: | :x:  |
| Update search plugins | :white_check_mark: | :x:  |





## Version Guidance

| Version | Status     | Packagist           | Namespace    | Repo                | Docs                | PSR-7 | PHP Version |
|---------|------------|---------------------|--------------|---------------------|---------------------|-------|-------------|
|||||||||