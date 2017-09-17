echo "Updating JS files..."
rm public/assets/js/avatar-creator*
cp ../../avatar-creator/dist/avatar-creator* public/assets/js

echo "Updating CSS files..."
rm public/assets/css/creator.css
cp ../../avatar-creator/css/creator.css public/assets/css
