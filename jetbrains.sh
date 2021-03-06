#!/bin/bash
cd /tmp

# clion
wget "data.services.jetbrains.com/products/download?code=CL&platform=linux" -O clion.tar.gz
#Rider
wget "data.services.jetbrains.com/products/download?code=RD&platform=linux" -O rider.tar.gz
#Idea
#wget "data.services.jetbrains.com/products/download?code=IIU&platform=linux" -O idea.tar.gz
#pycharm
wget "data.services.jetbrains.com/products/download?code=PCP&platform=linux" -O pycharm.tar.gz
#datagrip
wget "data.services.jetbrains.com/products/download?code=DG&platform=linux" -O datagrip.tar.gz

mkdir /tmp/update 
ls  *tar.gz | while read line
do
      echo "Extracting $line"
      tar -xzf $line -C /tmp/update/
done

rm  *tar.gz

cd /tmp/update/
ls  | while read line
do
      newfolder=${line,,}
      newfolder=${newfolder%%-*}
      mv $line $newfolder
done

ls  | while read line
do
      sudo rm -R /usr/local/etc/$line
      sudo mv $line /usr/local/etc/
      /usr/local/etc/$line/bin/$line.sh
done

cd ..
rm -R /tmp/update
