# RSS feed for [z7_blog](https://github.com/zeroseven/z7_blog)

You want a RSS feed for your blog, be super flexible and with the least amount of work possible? You've come to the right place.
Install the extension, enter the URL and you're done!

## :wrench: Installation

Get this extension via `composer req zeroseven/z7-blog-rss`.

## :tada: Go to the RSS feed

Every used list plugin on the page can simultaneously also be reached as a RSS feed.
To achieve this, it's enough to add `?type=1598538810` to the URL and there you go, you have your RSS feed with all the settings from the corresponding list plugin.

**Examples**:

* https://example.com/blog?type=1598538810
* https://example.com/blog/category-1?type=1598538810

Note: When a page contains multiple list plugins, the settings of the first element will be considered for the RSS feed.

### RouteEnhancer configuration:

If you use the `Configuration/Site/config.yaml` in your site configuration, you can also call `/rss.xml` instead of the type URL.

**Examples**:

* https://example.com/blog/rss.xml
* https://example.com/blog/category-1/rss.xml

## Static feeds:

If you want to the configuration to be static instead, you can use something like this instead in TypoScript:

```
blogRSSFeed {
  11 < blogRSSFeed.10.renderObj
  11.settings {
       category = 5
       archiveMode = 2
    }
  }

  10 >
}
```
