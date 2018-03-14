# statamic naver map addon

naver map addon.

### Installation

Clone or download the repository and move the "NaverMaps" folder into your `site/addons` folder.


### Usage

You can now use social_login tag like so:

```
{{ naver_maps }}
```

### Options

The following options are available

- address
- zoom : default 10
- width : default 100%
- height : default 300px

Example.

```code
{{ naver_maps address="종로구" zoom="15" width="90%" }}
```
