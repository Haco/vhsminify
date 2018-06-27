# vhsminify

## Install

Simply install the extension alongside `vhs` and set the following in TypoScript setup:

```
plugin.tx_vhs {
  assets {
    compressCss = 1
    compressJs = 1
  }
}
```

Now, your CSS and JavaScript assets should be minified.

## Credits

[matthiasmullie/minify](https://github.com/matthiasmullie/minify)

Icons made by [Vitaly Gorbachev](https://www.flaticon.com/authors/vitaly-gorbachev) from [www.flaticon.com](https://www.flaticon.com/) is licensed by [CC 3.0 BY](http://creativecommons.org/licenses/by/3.0/)