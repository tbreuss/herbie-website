FROM php:5.6-cli

USER root

# Installing git to install dependencies later and necessary libraries for postgres
# and mysql including client tools. You can remove those if you don't need them for your build.
RUN apt-get update \
    && apt-get install -y sudo git zip unzip \
    && rm -rf /var/lib/apt/lists/*

# Set the WORKDIR to /app so all following commands run in /app
WORKDIR /app

# Copy all files into the app directory.
COPY . ./

# Add user
RUN useradd -ms /bin/bash newuser \
	&& echo "newuser ALL=NOPASSWD: ALL" >> /etc/sudoers \
	&& chown -R newuser /app

# Install Composer and make it available in the PATH
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

USER newuser

# Install dependencies with Composer.
# --prefer-source fixes issues with download limits on Github.
# --no-interaction makes sure composer can run fully automated
RUN composer install --prefer-source --no-interaction

# Change directory
WORKDIR /app/web

# Expose port
EXPOSE 8888

# Run website
CMD ["php", "-S", "0.0.0.0:8888"]
