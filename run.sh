#!binsh
python3 www/Hacker-top-News/scrape.py --get >> www/Hacker-top-News/scrape.log
python3 www/Hacker-top-News/scrape.py --process >> www/Hacker-top-News/scrape.log
python3 www/Hacker-top-News/scrape.py --combine >> www/Hacker-top-News/scrape.log
python3 www/Hacker-top-News/scrape.py --clean >> www/Hacker-top-News/scrape.log
