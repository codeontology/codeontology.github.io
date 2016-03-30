# CodeOntology website
This repository contains the sources of the CodeOntology website, hosted by [GitHub Pages](https://jekyllrb.com/docs/github-pages/).
In order to run the website locally, install jekyll and download the repository as shown below.

## Install Jekyll on Ubuntu
As of March 2016, since Jekyll requires Ruby 2.0, the followings are needed on Ubuntu (which by default installs ruby 1.9):
```
sudo apt-get install ruby2.0 ruby2-0-dev
sudo mv /usr/bin/ruby /usr/bin/ruby1.9
sudo mv /usr/bin/gem /usr/bin/gem1.9
sudo ln -s /usr/bin/ruby2.0 /usr/bin/ruby
sudo ln -s /usr/bin/gem2.0 /usr/bin/gem
sudo gem install jekyll
```

See the [official Jekyll site](https://jekyllrb.com/docs/installation/) for updates.

## Download the repository and run Jekyll
Now that Jekyll is installed on your machine, run the following:
```
git clone https://github.com/codeontology/codeontology.github.io.git
cd codeontology.github.io
jekyll server
```
Now go to [http://127.0.0.1:4000](http://127.0.0.1:4000) to see the website running on your machine.
