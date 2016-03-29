# codeontology.github.io
project webpage


## How to install jekyll on Ubuntu
As of March 2016, since Jekyll requires Ruby 2.0, the followings are needed on Ubuntu (which by default installs ruby 1.9):
```
sudo apt-get install ruby2.0 ruby2-0-dev
sudo mv /usr/bin/ruby /usr/bin/ruby1.9
sudo mv /usr/bin/gem /usr/bin/gem1.9
sudo ln -s /usr/bin/ruby2.0 /usr/bin/ruby
sudo ln -s /usr/bin/gem2.0 /usr/bin/gem
sudo gem install jekyll
```
Then start the webserver with `jekyll server`.

See the [official Jekyll site](https://jekyllrb.com/docs/installation/) for updates.
