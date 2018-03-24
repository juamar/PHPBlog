<?php
	require_once(__DIR__.'/Connexio.php');

	/**
	 * Class Post
	 */
	class Post
	{
		/**
		 * @var PDO
		 */
		private $connection;
	 
		/**
		 * Post constructor.
		 */
		public function __construct()
		{
			$ins = Connexio::getInstance();
			$this->connection = $ins->getConnexio();
		}
	 
		/**
		 * @return array
		 */
		public function get_posts()
		{
			try
			{
				//get all posts
				$posts = $this->connection->query('SELECT * FROM posts');
			 
				if( ! empty( $posts ) )
				{
					return  $posts->fetchAll();
				}
				return array();
			}
			catch(PDOException $e) 
			{
				// Print PDOException message
				echo $e->getMessage();
			}

		}
	 

		/**
		 * @param $post
		 * @param $content
		 * @return bool
		 */
		public function save_post( $title , $content )
		{
			try
			{
				// Preparem INSERT statement per SQLite3 file db
				$insert = "INSERT INTO posts (title, content) VALUES (:title, :content)";
				
				// carreguem la senténcia
				$stmt = $this->connection->prepare($insert);
			 
				// Bind parameters to statement variables
				$stmt->bindParam(':title', $title);
				$stmt->bindParam(':content', $content);
			 
				// Execute Insert statement
				$stmt->execute();
			}
			catch(PDOException $e) 
			{
				// Print PDOException message
				echo $e->getMessage();
			}
		}


		/**
		 * @param $post
		 * @return bool
		 */
		public function update_post( $id , $title , $content )
		{
			$update = "UPDATE posts SET title = :title , content = :content WHERE id= :id";
			
			// carreguem la senténcia
			$stmt = $this->connection->prepare($update);
		 
			// Bind parameters to statement variables
			$stmt->bindParam(':title', $title);
			$stmt->bindParam(':content', $content);
			$stmt->bindParam(':id', $id);
		 
			// Execute Insert statement
			$stmt->execute();
		}
	 
		/**
		 * @param $id
		 * @return bool
		 */
		public function delete_post( $id )
		{
			try
			{
				$delete = "delete from posts where id=:id";
				
				// carreguem la senténcia
				$stmt = $this->connection->prepare($delete);
			 
				// Bind parameters to statement variables
				$stmt->bindParam(':id', $id);
			 
				// Execute Insert statement
				$stmt->execute();
			}
			catch(PDOException $e) 
			{
				// Print PDOException message
				echo $e->getMessage();
			}
		}
		
		public function getPost( $id )
		{
			try
			{
				//get 1 post
				$posts = $this->connection->query('SELECT * FROM posts where id='.$id);
			 
				if( ! empty( $posts ) )
				{
					return  $posts->fetchAll();
				}
				return array();
			}
			catch(PDOException $e) 
			{
				// Print PDOException message
				echo $e->getMessage();
			}
		}

	}