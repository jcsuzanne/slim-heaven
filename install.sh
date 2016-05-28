wget https://github.com/jcsuzanne/starter-heaven/archive/master.zip
unzip master.zip
cd starter-heaven-master
mv gulp ../
mv gulpfile.js ../
mv package.json ../
mv resources ../
cd ../
rm -R starter-heaven-master
rm master.zip
npm install
gulp start