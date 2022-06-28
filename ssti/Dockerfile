FROM python:3.9-slim-buster

RUN apt-get update && apt-get install -y \
    build-essential \
    netcat \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /app

COPY src/requirements.txt requirements.txt

RUN python -m pip install --no-cache-dir --upgrade \
    pip \
    setuptools \
    wheel

RUN python -m pip install --no-cache-dir \
    -r requirements.txt

COPY src/app.py app.py

EXPOSE 8888

CMD ["python", "app.py"]