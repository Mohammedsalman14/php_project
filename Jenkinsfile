pipeline {
    agent any

    stages {
        
        
        stage('Build Docker Image') {
            steps {
                // Build Docker image
                script {
                    sh " docker build -t salman14/php_project:1.5 ."
                    sh " docker push salman14/php_project:1.5 "
                }
            }
        }
        
        stage('Deploy to EC2') {
            steps {
                // Example: deploy Docker image to EC2 instance
                script {
                    def dockerComposeCmd = "docker-compose -f docker-compose.yaml up --detach"
                     // Example: SSH to EC2 instance and deploy Docker container
                    sshagent(['ec2-docker-deploy']) {
                        sh "scp docker-compose.yaml ubuntu@54.226.20.7:/home/ubuntu"
                        sh " ssh -o StrictHostKeyChecking=no ubuntu@54.226.20.7 ${dockerComposeCmd}"
                    }
                }
            }
        }
    }
}
