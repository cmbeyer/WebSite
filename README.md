# Website built by GitHub to upload to remote servers with Docker

This website I have designed uses the capability of Github, to merge branches from a dev branch to the master branch.

 ### Below are the steps of the work flow from development to production:   

1. Using any PHP IDE that supports GIT, in this case I am using PHPSTORM, take from the dev branch and make changes that you would like. 
2. Post the commit from the dev branch into the repo using a commit and push to the dev branch.
![Alt text](/images/screenshot1.png?raw=true)
3. After a commit is good and passes in the dev branch, a pull request is made on the master branch to pull the new change from the dev branch. 
![Alt text](/images/screenshot2.png?raw=true)
![Alt text](/images/screenshot3.png?raw=true)
4. After the pull request and merge requests get initiated, A CI/CD job gets initiated within the Github repository that I created, named file: **/.github/workflows/dockerfile.yml**
![Alt text](/images/screenshot4.png?raw=true)
5. When the CI/CD job is completed building the Docker image file, it pushes the file to my personal docker repository.  
6. After the push is complete, a curl request is made to my remote server. That curl initiates a linux script i have that will run a docker pull, and then use that docker image as website to host.

After all of these steps are complete, you have a working website that can be viewed on the web.  This all links to a domain I have:
<a href="atomictechnologies.tech">atomictechnologies.tech</a>

This is still an ongoing personal project, where updates will be made as I develop new features. 
