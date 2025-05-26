pipeline {
    agent any
    stages {
        stage('Cloner le dépôt') {
            steps {
                git 'https://github.com/bams-dev/icm.git'
            }
        }
        stage('Vérifier le code PHP') {
            steps {
                echo 'Analyse syntaxique de l\'application PHP...'
                sh 'php -l index.php'
            }
        }
        stage('Docker Build') {
            steps {
                echo 'Construction de l\'image Docker de l\'application...'
                sh 'docker build -t icm-app .'
            }
        }
        stage('Test conteneur') {
            steps {
                echo 'Test du conteneur'
                sh 'docker run --rm -p 8888:80 -d icm-app'
            }
        }
    }
}
