pipeline {
    agent any

    stages {
        
        
        stage('Build Docker Image') {
            steps {
                // Build Docker image
                script {
                    sh " docker build -t salman14/php_project:1.4 ."
                    sh " docker push salman14/php_project:1.4 "
                }
            }
        }
        
        stage('Deploy to EC2') {
            steps {
                // Example: deploy Docker image to EC2 instance
                script {
                    def dockerCmd = " docker run -p 80:80 -d salman14/php_project:1.4 "
                    // Example: SSH to EC2 instance and deploy Docker container
                    sshagent(['ec2-docker-deploy']) {
                        sh " ssh -o StrictHostKeyChecking=no ubuntu@54.226.20.7 ${dockerCmd}"
                    }
                }
            }
        }
    }
}
