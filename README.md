# RSS-Feed für [z7_blog](https://github.com/zeroseven/z7_blog)

Du möchtest einen RSS-Feed für deinen Blog, super flexibel und möglichst ohne Aufwand? Hier bist du richtig. 

:one: Erweiterung installieren  
:two: URL aufrufen  
:three: Fertig!

## :wrench: Installation

Get this extension via `composer req zeroseven/z7-blog-rss`. 

## RSS-Feed aufrufen

Jedes auf der Website verwendete List-Plugin kann gleichzeitig auch als RSS-Feed aufgerufen werden. 
Dazu genügt es den Parameter `?type=1598538810` an die URL zu hängen und schon erhälst du den Feed mit allen hinterlegten Plugin-Einstellungen.

**Beispiel**: 
* https://example.com/blog?type=1598538810
* https://example.com/blog/category-1?type=1598538810

Hinweis: Wenn auf einer Seite mehrere Listen hinterlegt sind, werden die Einstellungen des ersten Elements der Seite für den RSS-Feed verwendet.

### RouteEnhancer configuration:

Wenn du die `Configuration/Site/config.yaml` in deiner Site-Konfiguration integrierst kannst du auch nur ein `/rss.xml` anhängen.

**Beispiel**: 

* https://example.com/blog/rss.xml
* https://example.com/blog/category-1/rss.xml

## Static feeds:

Wenn du dir die Konfiguration für die Ausgabe lieber statisch hinterlegen möchtest, kannst du das wie in diesem Beispiel umsetzen: 

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
